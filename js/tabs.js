export default function tabs() {
    // Listen for click events
    document.addEventListener('click', function (event) {

        // Only take action if the clicked link was a tab toggle with a valid anchor link
        if (!event.target.classList.contains('tab-toggle') || !event.target.hash) return;

        // Get the anchored content
        var content = document.querySelector(event.target.hash)
        if (!content) return;

        // Store the ID as a data attribute and remove it
        content.setAttribute('data-id', content.id);
        content.id = '';

    }, false);

    console.log('Tabs Loaded...');
}