<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
      // Ensure that all routes in this controller are protected by the auth middleware
    

 
        return view('dashboard.index', compact('user')); // Assuming there's a dashboard.index view
    }

    // Add other dashboard-related methods below as needed...
}
