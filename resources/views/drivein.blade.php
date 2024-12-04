<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/drivein.css') }}" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Drive and Dine</title>
</head>

<body>
    <div class="container text-center my-4">
        <h1>Drive and Dine</h1>
    </div>

    <!-- Slot Display Section -->
    <div class="container d-flex justify-content-center display">
        <div class="row">
            @foreach (range(1, 8) as $slot)
                <div class="col-3 box" id="slot-{{ $slot }}-display">
                    <i class="bx bx-car" id="car-{{ $slot }}-display"></i> {{ $slot }}
                </div>
            @endforeach
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="container d-flex justify-content-center align-items-center my-4">
        <div class="row text-center">
            <div class="col-4">
                <button class="btn-primary w-100" data-bs-toggle="modal" data-bs-target="#reserveModal">Reserve</button>
            </div>
            <div class="col-4">
                <button class="btn-success w-100" data-bs-toggle="modal" data-bs-target="#orderModal">Order Now</button>
            </div>
            <div class="col-4">
                <button class="btn-info w-100" data-bs-toggle="modal" data-bs-target="#viewTokenModal">View Token</button>
            </div>
        </div>
    </div>

    <!-- Modal for Reserve -->
    <div class="modal fade" id="reserveModal" tabindex="-1" aria-labelledby="reserveModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reserveModalLabel">Reserve Slot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="slot" class="form-label">Select Slot Number</label>
                            <div class="container d-flex justify-content-center">
                                <div class="row">
                                    @foreach (range(1, 8) as $slot)
                                        <div class="col-3 box" id="slot-{{ $slot }}" onclick="selectSlot({{ $slot }})">
                                            <i class="bx bx-car" id="car-{{ $slot }}"></i> {{ $slot }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Payment Confirmation -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Confirm Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div>
                        <strong>Total Amount: ₹<span id="totalAmount">0</span></strong>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="confirmPaymentBtn">Confirm Payment</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Order Now -->
    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">Order Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="tokenNumber" class="form-label">Enter Token Number</label>
                        <input type="text" class="form-control" id="tokenNumber" placeholder="Enter your token number">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="confirmOrderBtn">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for View Token -->
    <div class="modal fade" id="viewTokenModal" tabindex="-1" aria-labelledby="viewTokenModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="viewTokenModalLabel">View Token</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>X-X-X-X-X</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let selectedSlots = [];
        let isPaymentConfirmed = false;
        let generatedToken = '';  // Global variable to store the generated token

        function selectSlot(slotNumber) {
            const index = selectedSlots.indexOf(slotNumber);
            if (index > -1) {
                selectedSlots.splice(index, 1);
                document.getElementById(`slot-${slotNumber}`).classList.remove('slot-selected');
                document.getElementById(`car-${slotNumber}`).style.color = '';
                updateSlotStatus(slotNumber, 'free');
            } else {
                selectedSlots.push(slotNumber);
                document.getElementById(`slot-${slotNumber}`).classList.add('slot-selected');
                document.getElementById(`car-${slotNumber}`).style.color = 'red';
                updateSlotStatus(slotNumber, 'reserved');
            }

            updateTotalAmount();
        }

        function updateSlotStatus(slotNumber, status) {
    fetch("{{ route('update-slot-status') }}", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
        body: JSON.stringify({
            slot: slotNumber,
            status: status
        })
    })
    .then(response => response.json())
    .then(data => {
        if (!data.success) {
            alert('Error updating slot status!');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while updating slot status. Please try again.');
    });
}


        function updateTotalAmount() {
            const totalAmount = selectedSlots.length * 100;
            document.getElementById('totalAmount').innerText = totalAmount;
        }

        document.getElementById('confirmPaymentBtn').addEventListener('click', function () {
            if (selectedSlots.length === 0) {
                alert('No slots selected!');
                return;
            }

            isPaymentConfirmed = true;

            selectedSlots.forEach(slot => {
                document.getElementById(`car-${slot}-display`).style.color = 'red';
            });

            generatedToken = 'TKN-' + Math.random().toString(36).substr(2, 9).toUpperCase(); 
            document.getElementById('viewTokenModalLabel').innerText = 'Your Token';
            document.querySelector('#viewTokenModal .modal-body').innerText = generatedToken;

            fetch("{{ route('reserve-and-insert-token') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({
                    slots: selectedSlots,
                    totalAmount: selectedSlots.length * 100,
                    token: generatedToken
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Payment confirmed and token generated');
                    selectedSlots = [];
                    $('#reserveModal').modal('hide');
                    $('#paymentModal').modal('hide');
                } else {
                    alert('Error confirming payment');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while confirming payment');
            });
        });

        document.getElementById('confirmOrderBtn').addEventListener('click', function () {
            const enteredToken = document.getElementById('tokenNumber').value.toUpperCase();
            if (enteredToken === generatedToken) {
                alert('Order Confirmed');
                window.location.href="management/login"
            } else {
                alert('Invalid Token');
            }
        });
    </script>

</body>
</html>
