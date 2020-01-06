<?php

namespace App\Http\Requests;

use App\User;
use App\Services\PermissionService;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClipVisibilityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(User $user)
    {
        return app(PermissionService::class)->check($user, 'update-clip-visibility');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'visibility' => 'required|boolean',
        ];
    }
}
