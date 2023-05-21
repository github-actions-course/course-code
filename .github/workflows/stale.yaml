name: Stale Issues & PRs
on:
  schedule:
    - cron: "0 14 * * *"
    - cron: "0/5 * * * *" # JUST FOR TESTING

jobs:
  stale:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/stale@v8
        with:
          stale-issue-message: "This is some message."
          days-before-stale: 1
          days-before-close: 5
