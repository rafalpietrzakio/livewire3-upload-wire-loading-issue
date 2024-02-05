<style>
    .loader {
        border-top-color: #3498db;
        -webkit-animation: spinner 1.5s linear infinite;
        animation: spinner 1.5s linear infinite;
    }

    @-webkit-keyframes spinner {
        0% {
            -webkit-transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spinner {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>
<div
    wire:loading
    x-cloak
>
    <div style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; width: 100%; height: 100vh; z-index: 50; overflow: hidden; background-color: rgba(107, 114, 128, 0.75); display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <div style="animation: spin 1s linear infinite; border-radius: 50%; border: 4px solid transparent; border-top: 4px solid #cbd5e0; height: 3rem; width: 3rem; margin-bottom: 1rem;"></div>
        <h2 style="text-align: center; color: white; font-size: 1.25rem; font-weight: 600;">Processing your request...</h2>
        <p style="width: 33.333333%; text-align: center; color: white;">This may take a few seconds, please don't close this page.</p>
    </div>
</div>
