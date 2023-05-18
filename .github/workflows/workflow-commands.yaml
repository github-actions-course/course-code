name: Workflow Commands
on: [push]

jobs:
  testing-wf-commands:
    runs-on: ubuntu-latest
    steps:
      - name: Setting an error message
        run: echo "::error::Missing semicolon"
      - name: Setting an error message with params
        run: echo "::error title=Error title,file=app.js,line=2,endLine=3,col=5,endColumn=7::Missing Semicolon"
      - name: Setting a debug message with params
        run: echo "::debug title=Debug title,file=app.js,line=2,endLine=3,col=5,endColumn=7::Missing Semicolon"
      - name: Setting an warning message with params
        run: echo "::warning title=Warning title,file=app.js,line=2,endLine=3,col=5,endColumn=7::Missing Semicolon"
      - name: Setting an notice message with params
        run: echo "::notice title=Notice title,file=app.js,line=2,endLine=3,col=5,endColumn=7::Missing Semicolon"
      - name: Group of logs
        run: |
          echo "::group::My group title"
          echo "Inside group"
          echo "::endgroup::"
      - name: Masking a value
        run: echo "::add-mask::Secret String"
      - name: Echo a secret
        run: echo "Secret String"
