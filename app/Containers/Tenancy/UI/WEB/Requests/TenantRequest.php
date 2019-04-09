<?php

namespace App\Containers\Tenancy\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class ViewDashboardRequest.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class TenantRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'domain' => 'required|min:3|max:30'
        ];
    }
}
