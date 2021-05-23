<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MMSProjectRequest extends FormRequest
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
        return [
            'title' => 'required',
            'content' => 'required',
            'pub_date' => 'required',
            'metadesc' => 'required',
            'slug' => 'required|unique:m_m_s_projects,slug,'.$this->post
        ];
    }
}
