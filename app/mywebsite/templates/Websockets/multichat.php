<?= $this->Html->css('multichat') ?>
<div class="container container-xxl">
    <div class="row">
        <div class="col-lg-4">
            <div class="heading">Chat 1</div>
            <iframe class="chat-iframe" src="https://website.cmbsolutions.nl:8443/chat"></iframe>
        </div>
        <div class="col-lg-4">
            <div class="heading">Chat 2</div>
            <iframe class="chat-iframe" src="https://website.cmbsolutions.nl:8443/chat"></iframe>
        </div>
        <div class="col-lg-4">
            <div class="heading">Status</div>
            <iframe class="chat-iframe" src="https://website.cmbsolutions.nl:8443/status"></iframe>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="heading">Push Client</div>
            <iframe class="chat-iframe" src="https://website.cmbsolutions.nl:8443/pushmessage"></iframe>
        </div>
    </div>
</div>
