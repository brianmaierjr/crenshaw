module.exports = {
  combine: {
    files: {
      'css/build/minified/style.css': ['css/build/prefixed/style.css'],
      'css/build/minified/ie.css': ['css/build/prefixed/ie.css'],
    }
  }
}
