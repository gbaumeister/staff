<?php namespace Nambit\Staff\Models;

use Model;

/**
 * Model
 */
class Entry extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /** @var array Translation support */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['entries'];

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
