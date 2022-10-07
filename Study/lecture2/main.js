let tag = document.querySelector('#field');

tag.addEventListener('click', () =>
    console.log('Click was there!')
);
tag.addEventListener('contextmenu', (event) => {
    console.log('Context menu click!');
    event.preventDefault();
})
tag.addEventListener('mousemove', (event) => {
   console.log(`Mouse is move! ${event.clientX} ${event.clientY}`);
});
tag.addEventListener('wheel', (event) => {
    console.warn(`Mouse is move! ${event.clientX} ${event.clientY}`);
});
// tag.addEventListener('mousemove', (event) => {
//     console.error(`Mouse is move! ${event.clientX} ${event.clientY}`);
// });
// tag.addEventListener('mousemove', (event) => {
//     console.info(`Mouse is move! ${event.clientX} ${event.clientY}`);
// });