<div class="bg-neutral-950 w-full min-h-svh flex flex-col gap-4 items-center justify-center text-white" dir="ltr">

    <p>My Unique Identifier: {{ $unique_identifier }}</p>

    <div class="flex flex-col gap-4" wire:ignore id="messages">
        <p>
            ~system: do not share any sensitive data!
        </p>
    </div>

    <div class="flex flex-col gap-2">
        <label for="input-display-name">
            Display Name*
        </label>
        <input
            id="input-display-name"
            type="text"
            wire:model="display_name"
            class="appearance-none bg-neutral-800 outline-none px-4 py-2 rounded"
        >
    </div>

    <div class="flex flex-col gap-2">
        <label for="input-message">
            Message*
        </label>
        <input
            id="input-message"
            type="text"
            class="appearance-none bg-neutral-800 outline-none px-4 py-2 rounded"
        >
    </div>

    <button id="btn-send-message" type="button" class="text-white bg-neutral-800 px-4 py-2 rounded-md">Send Message</button>

</div>

@script
<script>
    const messageInput = document.getElementById('input-message');
    const sendMessageBtn = document.getElementById('btn-send-message');

    messageInput.addEventListener('keyup', handleTyping);
    sendMessageBtn.addEventListener('click', sendMessage);

    function sendMessage()
    {
        const message = document.createElement('div');
        message.innerText = messageInput.value;
        $wire.send(messageInput.value);
        messageInput.value = '';
    }

    let timeoutId;
    function handleTyping()
    {
        let c = Echo.channel('die-with-me');
        console.log(c)
        clearTimeout(timeoutId);
        timeoutId = setTimeout(handleIdle, 500);
        if (!$wire.isTyping)
        {
            $wire.typing();
        }
    }

    function handleIdle()
    {
        $wire.idle();
    }
</script>
@endscript
