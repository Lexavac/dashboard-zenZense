<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Tb_productcateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        switch ($this->method()) {
            case 'POST':
            {
                return [
                    'name' => ['required', 'max:255', 'unique:tb_productcates'],
                    'desc' => ['required', 'max:255',],
                    'category_id' => ['nullable'],
                ];
            }
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'name' => ['required', 'max:255', 'unique:tb_productcates,name,'.$this->route()->category->id],
                        'desc' => ['required', 'max:255',],
                    'category_id' => ['nullable'],
                ];
            }
            default: break;
        }

    }
}
