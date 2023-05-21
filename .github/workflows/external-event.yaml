name: External Events
on:
  repository_dispatch:
    types: [build]
jobs:
  echo-a-string:
    runs-on: ubuntu-latest
    steps:
      - run: echo ${{ github.event.client_payload.env }}
