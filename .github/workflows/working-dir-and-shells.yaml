name: Working Dirs & Shells
on: [push]
defaults:
  run:
    shell: bash
    # working-directory: /de/ed
jobs:
  display-wd-info:
    runs-on: ubuntu-latest
    steps:
      - name: Display Working Directory & List Files
        run: |
          pwd
          ls -a
          echo $GITHUB_SHA
          echo $GITHUB_REPOSITORY
          echo $GITHUB_WORKSPACE
      - name: Change Working Dir
        working-directory: /home/runner
        run: pwd
  display-wd-info-windows:
    runs-on: windows-latest
    defaults:
      run:
        shell: pwsh
    steps:
      - name: Display Working Directory & List Files
        run: |
          Get-Location
          dir
          echo $env:GITHUB_SHA
          echo $env:GITHUB_REPOSITORY
          echo $env:GITHUB_WORKSPACE
      - name: Python Shell
        shell: python
        run: |
          import platform 
          print(platform.processor())
