<?php

namespace App\Http\Controllers;
use App\Models\orders;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{

   public function index()
   {
      $customercount=orders::count();
      $amount=orders::sum('price');
       // Pass the data to the view
       return view('dashboard.index',compact('customercount','amount'));
}
}