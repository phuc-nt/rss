<?php
namespace RSS\Controller;

use RSS\Controller\AppController;
use Cake\Network\Http\Client;
use Cake\Core\Configure;

/**
 * Base Controller
 *
 * @property \RSS\Model\Table\BaseTable $Base
 */
class BaseController extends AppController
{
    public function initialize() {
        parent::initialize();

        $this->loadComponent( 'Flash' );
    }

    public function index() {
        $rss_url = Configure::read('rss_url');

        $http      = new Client();
        $url       = $rss_url.'api/function/listBy';
        $params    = [ 'serviceId' => 'RSS' ];
        
        $response  = $http->get($url, $params)->body;
        $functions = json_decode($response);
        
        $this->set( compact( 'functions' ) );
    }

    public function update() {
        $rss_url = Configure::read('rss_url');

        $f1_id     = $_POST["f1_id"];
        $f1_status = $_POST["f1_status"];
        $f2_id     = $_POST["f2_id"];
        $f2_status = $_POST["f2_status"];
        $f3_id     = $_POST["f3_id"];
        $f3_status = $_POST["f3_status"];

        $http = new Client();

        $url = $rss_url.'api/function/update';
        $params1 =   [   'functionId' => $f1_id ,
                        'status' => $f1_status 
                    ];

        $params2 =   [   'functionId' => $f2_id ,
                        'status' => $f2_status 
                    ];

        $params3 =   [   'functionId' => $f3_id ,
                        'status' => $f3_status 
                    ];

        $response1 = $http->get($url, $params1)->body;
        $response2 = $http->get($url, $params2)->body;
        $response3 = $http->get($url, $params3)->body;

        // $this->Flash->success( __( 'Function has been updated.' ) );
        // $this->redirect( ['controller' => 'RSS','action' => 'index'] );

        if ($response1 === '200' && $response2 === '200' && $response3 === '200') {
            $this->Flash->success( __( 'Function has been updated.' ) );
            $this->redirect( ['controller' => 'Base','action' => 'index'] );
        } else {
            $this->Flash->error( __( 'Function update failed.' ) );
            $this->redirect( ['controller' => 'Base','action' => 'index'] );
        }
        
    }
}
