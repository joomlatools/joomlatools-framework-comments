# Nooku Comments

## What is Nooku Comments?

Nooku Comments is a re-usable component for implementing basic commenting functionality. This component is built on top
of [Nooku Framework](https://github.com/nooku/nooku-framework).

## Requirements

- Nooku Framework 2 or newer.
- PHP 5.2 or newer.
- MySQL 5.

## Installation

Nooku Comments can and should be installed by using [Composer](https://getcomposer.org/).

Go to the root directory of your Joomla installation in command line and execute this command:

```
composer require nooku/nooku-comments:2.*
```

The component will be installed in the `vendor` folder of the root directory of your Joomla site. Nooku will make sure
that the component is bootstrapped from that location and made available to other components extending it or just
making use of it.

Out of the box, Nooku comments will attempt to store comments in a database table named `comments`. An SQL dump file may
be found under the `/resources/install` directory for creating this database table. This database needs to be manually
created for the component to function properly. At the moment we only support MySQL.

## Contributing

We appreciate any contribution to Nooku Comments, whether it is related to bugs, grammar, or simply a suggestion or
improvement. We ask that any contribution follows a few simple guidelines in order to be properly received.

We follow the [GitFlow][gitflow-model] branching model, from development to release. If you are not familiar with it,
there are several guides and tutorials online to learn about it.

There are a few things you must know before submitting a pull request:

- All changes need to be made against the `develop` branch. However, it is very well appreciated and highly suggested to
start a new feature branch from `develop` and make your changes in this new branch. This way we can just checkout your
feature branch for testing before merging it into `develop`.
- We will not consider pull requests made directly to the `master` branch.

## Authors

See the list of [contributors](https://github.com/nooku/nooku-comments/contributors).

## License

The `nooku-comments` component is free and open-source software licensed under the [GPLv3 license](gplv3-license).

[gitflow-model]: http://nvie.com/posts/a-successful-git-branching-model/
[gplv3-license]: https://github.com/nooku/nooku-framework/blob/master/LICENSE.txt