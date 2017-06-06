<?php namespace Nambit\Staff\Models;

use Model;

/**
 * Model
 */
class Entry extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nambit_staff_entries';
    
    
    protected $jsonable = ['entries'];
}
