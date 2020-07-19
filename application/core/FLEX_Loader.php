<?

defined('BASEPATH') || exit('No direct script access allowed');

class FLEX_Loader extends CI_Loader
{

    static $iocContainer = array();

    public function service($serviceName, $param = null)
    {
        $service = strpos($serviceName, '/') > -1 ? end(explode('/', $serviceName)) : $serviceName;
        require_once(APPPATH . '/services/' .  $serviceName . '.php');
        
        if (array_key_exists($serviceName, FLEX_Loader::$iocContainer)) {
            return FLEX_Loader::$iocContainer[$serviceName];
        }

        $serviceInstance = $param == null ? new $service() : new $service($param);
        FLEX_Loader::$iocContainer[] = $serviceInstance;
        return $serviceInstance;
    }

    public function viewmodel($viewModelName)
    {
        require_once(APPPATH . '/viewmodels/' . $viewModelName . '.php');
    }

    public function clientTemplate($mainViewName, $viewModel, $viewTitle = 'EMPTY', $galleryName = '')
    {
        $this->loadTemplate('templates/ClientTemplate', $mainViewName, $viewModel, $viewTitle, $viewTitle, $galleryName);
    }

    private function loadTemplate($templateType, $mainViewName, $viewModel, $viewTitle = 'EMPTY', $galleryName = '')
    {
        $data = array();
        $data['viewTitle'] = $viewTitle;
        $data['viewModel'] = $viewModel;
        $data['templateMain'] = $this->view($mainViewName, $viewModel, true);
        $data['galleryName'] = $galleryName;

        $this->view($templateType, $data);
    }
}

/* End of file FLEX_Loader.php */
