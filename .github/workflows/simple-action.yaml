name: Simple Action
on: [push]

jobs:
  simple-action:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v3
      - name: Send a Slack Message
        uses: ./.github/actions/slack-php
        with:
          slack_webhook: ${{ secrets.SLACK_WEBHOOK }}
          message: Hello Slack
