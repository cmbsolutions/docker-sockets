<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         3.3.4
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use App\Form\PushmessageForm;
use Cake\Event\EventInterface;

/**
 * Chat Client Controller
 *
 * Controller used by ExceptionRenderer to render error responses.
 */
class WebsocketsController extends AppController
{
    /**
     * Initialization hook method.
     *
     * @return void
     */
    public function initialize(): void
    {
        $this->loadComponent('RequestHandler');
    }

    /**
     * beforeFilter callback.
     *
     * @param \Cake\Event\EventInterface $event Event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeFilter(EventInterface $event)
    {
    }

    public function chat()
    {

    }

    public function multichat()
    {

    }

    public function status()
    {

    }

    public function pushmessage()
    {
        $pushmessage = new PushmessageForm();
        if ( $this->request->is('post') ) {
            if (!$pushmessage->execute($this->request->getData())) {
                $pushmessage->setErrors(['message' => ['_required' => 'There was a problem submitting your message.']]);
            }
        }
        $this->set('pushmessage', $pushmessage);
    }
}
