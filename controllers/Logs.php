<?php namespace Octobro\MailLog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Octobro\MailLog\Models\Log;

/**
 * Logs Backend Controller
 */
class Logs extends Controller
{
    public $requiredPermissions = ['octobro.maillog.manage'];

    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Octobro.MailLog', 'maillog', 'logs');
    }

    public function index()
    {
        $this->vars['logs'] = $logs = Log::select('code')->groupBy('code')->get();
        $this->vars['sent'] = Log::where('sent', true)->count();
        
        $this->asExtension('ListController')->index();
    }
}
