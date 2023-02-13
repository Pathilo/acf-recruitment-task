<style>/* normalizes between browsers */
    html {
        line-height: 1.22;
        -webkit-text-size-adjust: 100%;
        scroll-behavior: smooth;
    }

    body {
        margin: 0;
        background: var(--color-white);
    }

    main {
        display: block;
        overflow: hidden;
    }

    img {
        border-style: none;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        font-family: inherit;
        font-size: 100%;
        line-height: 1.15;
        margin: 0;
    }

    button,
    input {
        overflow: visible;
    }

    button,
    select {
        text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
        -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
        border-style: none;
        padding: 0;
    }

    button:-moz-focusring,
    [type="button"]:-moz-focusring,
    [type="reset"]:-moz-focusring,
    [type="submit"]:-moz-focusring {
        outline: 1px dotted ButtonText;
    }

</style>

<style>/* theme defaults */
    
    /* set default background and color */
        body {
            font-family: 'Lato', sans-serif;
        }
    /* ensure that document is at least one screen high */
        html {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
    /* ensure that page root is at least one screen high and position main layout */
        body {
            flex-grow: 1;
            display: grid;
            grid-template-columns: 100%;
            grid-template-rows: auto 1fr auto auto;
            overflow-x: hidden;
        }

</style>

<style>/* theme atomic classes */

    /* screen readers */
    .visually_hidden,
    .visually_hidden_focusable:not(:focus):not(:active) {/* hides from eye view, but remains visible for screen readers */
        position: absolute;
        width: 1px;
        height: 1px;
        overflow: hidden;
        clip: rect(0 0 0 0);
        clip-path: inset(50%);
        white-space: nowrap;
    }
    
    /* fonts */

    .font-size-small {
        font-size: var(--font-size-small);
    }

    .font-size-regular {
        font-size: var(--font-size-regular);
    }

    .font-size-medium {
        font-size: var(--font-size-medium);
    }

    .font-size-title {
        font-size: var(--font-size-title);
    }

    .font-weight-light {
        font-weight: var(--font-weight-light);
    }

    .font-weight-regular {
        font-weight: var(--font-weight-regular);
    }

    .font-weight-medium {
        font-weight: var(--font-weight-medium);
    }

    .font-weight-semibold {
        font-weight: var(--font-weight-semibold);
    }

    .font-weight-bold {
        font-weight: var(--font-weight-bold);
    }

    .cont {
        width: var(--global-width);
        max-width: 100%;
    }
    .cont--small {
        width: var(--global-width--small);
        max-width: 100%;
    }

    /* colors */

    .color-white {
        color: var(--color-white);
    }

    .color-black {
        color: var(--color-black);
    }

    .color-blue {
        color: var(--color-blue);
    }

    /* backgrounds */

    .background-white {
        background-color: var(--color-white);
    }

    .background-black {
        background-color: var(--color-black);
    }
    
    /* layout */
    
    .flex {
        display: flex;
    }
    .grid {
        display: grid;
    }

    .relative {
        position: relative;
    }

    .absolute {
        position: absolute;
    }

    /* margin */
    .m-0 {
        margin: 0;
    }
    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

</style>


