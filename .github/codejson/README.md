## Generating code.json using cookiecutter

Follow the instructions below to generate your repository's `code.json` file using cookiecutter:

0. _Prerequisites_
  - python
  - [cookiecutter](https://github.com/cookiecutter/cookiecutter)

1. In `cookiecutter.json`, please fill in the values for the following fields:
  - `project_name`
  - `project_repo_name`
  - `project_org`

2. In the `.github` directory, run the following command:
```
cookiecutter . --directory=codejson
```

3. Enter information about the repository. This metadata will be stored in the `code.json` file.

4. `code.json` is successfully generated in repository!
