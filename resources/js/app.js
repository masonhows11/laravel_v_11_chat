import './bootstrap';

console.log('app started')
console.log(Echo)
// for test reverb channel in client side
// in listen() arg is event className
// in this test is ClickEvent event class name
// that defined in laravel project
Echo.channel('test-channel').listen('ClickEvent', testClickEvent);

function testClickEvent(event) {
    // console.log(event);
    // console.log(event.text);
    // console.log(
    //     document.getElementById(`counter-${event.text}`)
    // )


    const counterEl = document.getElementById(`counter-${event.text}`);
    let counter = parseInt(counterEl.innerText);
    counter++;
    counterEl.innerText = `${counter}`;
}
