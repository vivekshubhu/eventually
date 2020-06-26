<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required|min:3',
            'start' => 'date_format:Y-m-d H:i:s|before_or_equal:end',
            'end' => 'date_format:Y-m-d H:i:s|after_or_equal:start',
        ];
    }
    public function message()
    {
        return[
            'title.required' => 'fill in the title',
            'title.min' => 'title must have 3 characters!',
            'start.date_format' => 'fill in a valid start date',
            'start.before' => 'The start date / time must be less than the end date',
            'end.date_format' => 'fill in a valid end date',
            'end.after' => 'The end date / time must be bigger than the start date',
        ];
    }
}
