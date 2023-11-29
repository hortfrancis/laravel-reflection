@props ([
    'type' => 'default', //
    'message' => '', // Empty string by default
])

@php
    // Colour scheme for different types of messages
    $colours = [
        'default' => 'gray',
        'success' => 'green',
        'error' => 'red',
        'warning' => 'yellow',
        'info' => 'blue',
    ];

    // Set the colour based on the type of message
    $colour = $colours[$type];

@endphp

<div id="success-alert" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50">
    <div id="success-alert-box" class="bg-white p-6 rounded-lg shadow-lg text-center cursor-pointer">
        <p class="text-{{ $colour }}-600 font-bold mb-1">{{ $message }}</p>
        <button id="close-alert"
                class="mt-4 bg-{{ $colour }}-500 hover:bg-{{ $colour }}-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
            OK
        </button>
    </div>
</div>

<script>
    // Function to fade out and remove the alert
    function dismissAlert() {
        const successAlert = document.getElementById('success-alert');
        if (successAlert) {
            successAlert.style.transition = 'opacity 0.5s';
            successAlert.style.opacity = '0';
            // Remove the element from the DOM after the fade out
            setTimeout(() => successAlert.remove(), 500);
        }
    }

    // Wait for the DOM to fully load
    document.addEventListener('DOMContentLoaded', (event) => {
        // Set a timeout to fade out the success message after 5 seconds
        setTimeout(dismissAlert, 5000);

        // Event listener for clicking anywhere on the modal overlay
        document.getElementById('success-alert').addEventListener('click', dismissAlert);
    });
</script>
