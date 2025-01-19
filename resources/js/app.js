import './bootstrap';

console.log('app started')
console.log(Echo)
// for test reverb channel in client side
// in listen() arg is event className
// ini this test is ClickEvent event class
Echo.channel('test-channel').listen('ClickEvent', testClickEvent);

function testClickEvent(event)
{
    console.log(event);
}
