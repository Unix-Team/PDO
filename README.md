# PDO
Why PDO?

First things first. Why PDO at all?

PDO is a Database Abstraction Layer. The abstraction, however, is two-fold: one is widely known but less significant, while another is obscure but of most importance.

Everyone knows that PDO offers unified interface to access many different databases. Although this feature is magnificent by itself, it doesn't make a big deal for the particular application, where only one database backend is used anyway. And, despite some rumors, it is impossible to switch database backends by changing a single line in PDO config - due to different SQL flavors (to do so, one needs to use an averaged query language like DQL). Thus, for the average LAMP developer, this point is rather insignificant, and to him, PDO is just a more complicated version of familiar mysql(i)_query() function. However, it is not; it is much, much more.

PDO abstracts not only a database API, but also basic operations that otherwise have to be repeated hundreds of times in every application, making your code extremely WET. Unlike mysql and mysqli, both of which are low level, bare API, not intended to be used directly (but only as a building material for some higher level abstraction layer), PDO is such an abstraction already. It's still incomplete, but at least usable.

The real PDO benefits are:

    security (prepared statements that are usable)
    usability (many helper functions to automate routine operations)
    reusability (unified API to access multitude of databases, from SQLite to Oracle)

Note that although PDO is the best out of native db drivers, for a modern web-application consider to use an ORM with a Query Builder, or any other higher level abstraction library, with only occasional fallback to vanilla PDO. Good ORMs are Eloquent, RedBean, and Yii:AR. Aura.SQL is a good example of PDO wrapper with many additional features.
