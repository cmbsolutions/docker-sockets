<?php

namespace App\Form;

use BloatlessModified\WebSocket\PushClient;
use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class PushmessageForm extends Form
{
    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema->addField('message', ['type' => 'text']);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator->minLength('message', 1);

        return $validator;
    }

    protected function _execute(array $data): bool
    {
        require __DIR__ . '/../websocket/src/IPCPayload.php';
        require __DIR__ . '/../websocket/src/IPCPayloadFactory.php';
        require __DIR__ . '/../websocket/src/PushClient.php';

        /**
         * This code shows how to push data into the running websocket server.
         * In this case a system message is sent to the chat demo application.
         */

        $pushClient = new PushClient('/tmp/phpwss.sock');
        $pushClient->sendToApplication('ws/chat', [
            'action' => 'echo',
            'data' => $data['message'],
        ]);

        return true;
    }
}
