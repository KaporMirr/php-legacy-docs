str
        return preg_replace_callback('/^php.*\/.*\/(.*)\.html$/', function (array $matches) {
            return $matches[1];
        }, $filename);
    }
}
