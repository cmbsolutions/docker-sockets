<?= $this->Html->css('chat') ?>
<?= $this->Html->script('chat') ?>
<div id="container">
    <h1>Demo Chat Application</h1>
    <span id="status" class="offline">offline</span>

    <h2>Server-Response</h2>
    <div id="log"></div>

    <h2>Send Message</h2>
    <input id="data" placeholder="Type a message and hit enter..." type="text" />
    <button id="send">Send</button>
</div>
