<?php

namespace App\Http\Controllers;

use App\Userloan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserLoanController extends Controller
{
    /**
     * Store a newly created userloan in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function applyLoan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:userloans|max:255',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'amount_to_borrow' => 'required|numeric',
            'duration' => 'required|numeric',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ], 400);
        }

        $userLoan = UserLoan::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'salary' => $request->input('salary'),
            'amount_to_borrow' => $request->input('amount_to_borrow'),
            'duration' => $request->input('duration'),
            'password' => bcrypt($request->input('password')),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Your loan is successfull',
            'data' => $userLoan,
        ]);
    }
}
