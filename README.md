Write a class that provides change directory (cd) function for an abstract file system.

Notes:

- Root path is '/'.
- Path separator is '/' by default, but can be changed.
- No end separator is used, i.e. no paths end with a /.
- Parent directory is addressable as '..'.
- Directory names consist only of English alphabet letters (A-Z and a-z).
- The function should support both relative and absolute paths.
- The function will not be passed any invalid paths.
- Do not use built-in path-related functions.

For example:

    $path = new Path('/a/b/c/d');
    $path->cd('../x')
    echo $path->getCurrentPath();

should display `/a/b/c/x`.

There are tests the class should pass in the `tests` folder.