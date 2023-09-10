<?php

namespace App\Http\Controllers;

use App\Http\Requests\biographyUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class biographyController extends Controller
{
    /**
     * Display the user's biography form.
     */
    public function edit(Request $request): View
    {
        return view('biography.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's biography information.
     */
    public function update(biographyUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('biography.edit')->with('status', 'biography-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
