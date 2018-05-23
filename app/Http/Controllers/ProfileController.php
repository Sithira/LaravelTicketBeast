<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
	
	public function index()
	{
		$user = Auth::user();
		
		$tickets = $user->tickets;
		
		return view('home', compact('user', 'tickets'));
	}
	
	public function tickets()
	{
		$user = Auth::user();
		
		$tickets = $user->tickets;
		
		return view('tickets', compact('tickets'));
	}
	
	public function update(Request $request)
	{
		
		$this->validate($request, [
			'name' => 'required|min:3',
			'email' => 'email',
			'password' => 'nullable|min:6',
			'mobile' => 'required|min:10|max:10'
		]);
		
		if ($request->has('update_password'))
		{
			$request->request->add(['password' => bcrypt($request->input('password'))]);
			
			$request = $request->all();
		}
		else
		{
			$request = $request->except(['password']);
		}
		
		$user = Auth::user()->update($request);
		
		if ($user)
		{
			flash()->success("Update successful");
		}
		else
		{
			flash()->error("Update failed");
		}
		
		
		return back();
		
	}
	
	public function edit()
	{
		$user = Auth::user();
		
		return view('edit', compact('user'));
	}
	
	public function purchaseTicket(Request $request)
	{
		
		$this->validate($request, [
			'event_id' => 'required|exists:events,id',
			'quantity' => 'required|numeric'
		]);
		
		Auth::user()->tickets()->create([
			'event_id' => $request->input('event_id')
		]);
		
		flash()->success("Ticket has been successfully created");
		
		return back();
		
	}
	
}
