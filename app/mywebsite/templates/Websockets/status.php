<?= $this->Html->css('status') ?>
<?= $this->Html->script('status') ?>
<div>
    <h1>Server Status</h1>
    <span id="status" class="offline">disconnected</span>

    <div id="main">
        <div id="clientList">
            <h2>Clients:</h2>
            <select id="clientListSelect" multiple="multiple"></select>
        </div>

        <div id="serverInfo">
            <h2>Server Info:</h2>
            <p>Connected Clients: <span id="clientCount"></span></p>
            <p>Limit Clients: <span id="maxClients"></span></p>
            <p>Limit Connections/IP: <span id="maxConnections"></span></p>
        </div>

        <div class="clearer"></div>

        <div id="console">
            <h2>Server Messages:</h2>
            <div id="log"></div>
        </div>
    </div>
</div>
