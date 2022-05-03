# Package deprecated
Version 1.0.3 is the final version of this package.

As of Nova 4.3, footer customization is available [natively](https://github.com/laravel/nova-issues/discussions/3892#discussioncomment-2682938) in Nova. 

This package is no longer necessary and has been reduced to a wrapper around the native functionality for compatibility reasons, so that developers who don't switch to the native solution don't keep depending on the workaround implemented by previous versions of this package. Read on for the original (< 1.0.3) documentation of this package.

---

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