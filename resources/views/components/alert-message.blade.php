{{--@if (session('success'))--}}
{{--    <div id="alert-message" class="fixed inset-0 flex items-center justify-center px-4 py-6 pointer-events-none" x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">--}}
{{--        <div class="bg-green-500 text-white text-sm font-bold px-4 py-3 rounded shadow-lg" style="pointer-events: auto;">--}}
{{--            {{ session('success') }}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endif--}}


{{--@if (session('success'))--}}
{{--    <div id="success-alert" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50">--}}
{{--        <div class="bg-white p-6 rounded-lg shadow-lg text-center">--}}
{{--            <p class="text-green-600 font-bold">{{ session('success') }}</p>--}}
{{--            <p class="text-green-600 font-bold">Test Message!</p>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <script>--}}
{{--        // Wait for the DOM to fully load--}}
{{--        document.addEventListener('DOMContentLoaded', (event) => {--}}
{{--            const successAlert = document.getElementById('success-alert');--}}
{{--            // Set a timeout to fade out the success message after 3 seconds--}}
{{--            setTimeout(() => {--}}
{{--                successAlert.style.transition = 'opacity 0.5s';--}}
{{--                successAlert.style.opacity = '0';--}}
{{--                // Remove the element from the DOM after the fade out--}}
{{--                setTimeout(() => successAlert.remove(), 500);--}}
{{--            }, 3000);--}}
{{--        });--}}
{{--    </script>--}}
{{--@endif--}}


{{--Alert Message!--}}

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


{{--@if (session('success'))--}}


<div id="success-alert" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50">
    <div id="success-alert-box" class="bg-white p-6 rounded-lg shadow-lg text-center cursor-pointer">
        {{--            <p class="text-green-600 font-bold">{{ session('success') }}</p>--}}
{{--        <p class="text-{{ $colour }}-600 font-bold">Test Message!</p>--}}
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

{{--<script>--}}
{{--    // Function to fade out and remove the alert--}}
{{--    function fadeOutAlert() {--}}
{{--        const successAlert = document.getElementById('success-alert');--}}
{{--        successAlert.style.transition = 'opacity 0.5s';--}}
{{--        successAlert.style.opacity = '0';--}}
{{--        setTimeout(() => successAlert.remove(), 500);--}}
{{--    }--}}

{{--    // Handle closing of the alert modal--}}
{{--    document.addEventListener('DOMContentLoaded', () => {--}}
{{--        const closeButton = document.getElementById('close-alert');--}}
{{--        const successAlertBox = document.getElementById('success-alert-box');--}}
{{--        const successAlert = document.getElementById('success-alert');--}}

{{--        // Close the modal when the close button is clicked--}}
{{--        closeButton.addEventListener('click', fadeOutAlert);--}}

{{--        // Close the modal when clicking outside of it--}}
{{--        successAlert.addEventListener('click', (event) => {--}}
{{--            if (event.target === successAlert) {--}}
{{--                fadeOutAlert();--}}
{{--            }--}}
{{--        });--}}

{{--        // Set a timeout to fade out the success message after 3 seconds--}}
{{--        setTimeout(fadeOutAlert, 3000);--}}
{{--    });--}}
{{--</script>--}}
{{--@endif--}}
