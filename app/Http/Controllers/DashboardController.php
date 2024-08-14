<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }



        switch ($user->dashboard_type) {
            case 'cse 3rd sem':
                return view('pages.cse3rd');

            case 'cse 4th sem':
                    return view('pages.cse4th');
            
            case 'cse 5th sem':
                    return view('pages.cse5th');

            case 'cse 6th sem':
                        return view('pages.cse6th');

            case 'cse 7th sem':
                        return view('pages.cse7th');

            case 'cse 8th sem':
                         return view('pages.cse8th');
                        
                        
            case 'civil 3rd sem':
                         return view('pages.civil3rd');

            case 'civil 4th sem':
                        return view('pages.civil4th');

            case 'civil 5th sem':
                        return view('pages.civil5th');

            case 'civil 6th sem':
                        return view('pages.civil6th');

            case 'civil 7th sem':
                        return view('pages.civil7th');

            case 'civil 8th sem':
                        return view('pages.civil8th');





            case 'mechanical 3rd sem':
                        return view('pages.mechanical3rd');
   
            case 'mechanical 4th sem':
                        return view('pages.mechanical4th');
   
            case 'mechanical 5th sem':
                        return view('pages.mechanical5th');
   
            case 'mechanical 6th sem':
                        return view('pages.mechanical6th');
   
            case 'mechanical 7th sem':
                        return view('pages.mechanical7th');
   
            case 'mechanical 8th sem':
                        return view('pages.mechanical8th');
                                   

            

            case 'instru 3rd sem':
                        return view('pages.instru3rd');
       
            case 'instru 4th sem':
                        return view('pages.instru4th');
       
            case 'instru 5th sem':
                        return view('pages.instru5th');
       
            case 'instru 6th sem':
                        return view('pages.instru6th');
       
            case 'instru 7th sem':
                        return view('pages.instru7th');
       
            case 'instru 8th sem':
                        return view('pages.instru8th');




            case 'electrical 3rd sem':
                            return view('pages.electrical3rd');
           
                case 'electrical 4th sem':
                            return view('pages.electrical4th');
           
                case 'electrical 5th sem':
                            return view('pages.electrical5th');
           
                case 'electrical 6th sem':
                            return view('pages.electrical6th');
           
                case 'electrical 7th sem':
                            return view('pages.electrical7th');
           
                case 'electrical 8th sem':
                            return view('pages.electrical8th');
                                       
    
                    
                    
            
           default:
               return view('pages.blank');
        }
    }
}
