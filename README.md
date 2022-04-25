This package reintroduces footer customization to Laravel's Nova 4.

## Installation
Add the dependency to your project's `composer.json`:
```
composer require wdelfuego/nova4-customizable-footer
```

This package sets the default footer content to an empty string, so if you only wanted to remove the default footer you are now done.

## Customizing the footer

- Open `app/Providers/NovaServiceProvider.php` and add a use statement for `Wdelfuego\Nova4\CustomizableFooter\Footer`.

- In the `boot` method of that class, set your custom footer content by supplying the raw HTML:

```
Footer::set('<p class="text-center">Your own footer HTML</p>');
```

## Word of warning

This package works by updating the DOM after the Nova interface has been loaded successfully. Finding the footer element in the DOM is not an instantaneous process, the original footer content may still be visible to the end user for a brief moment. This typically only happens when the user first loads Nova.