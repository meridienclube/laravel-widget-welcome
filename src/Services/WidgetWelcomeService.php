<?PHP
namespace ConfrariaWeb\WidgetWelcome\Services;

use Illuminate\Support\Facades\DB;
use ConfrariaWeb\Widget\Contracts\WidgetServiceContract;

class WidgetWelcomeService implements WidgetServiceContract
{

    public function __construct()
    {
        //
    }

    public function set($data)
    {
        # code...
    }

    public function get()
    {
        $data['message'] = DB::table('widgets_welcome_messages')
                ->inRandomOrder()
                ->first()->message;
        return $data;
    }

}
