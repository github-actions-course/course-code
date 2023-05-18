name: Checkout
on: [push]

jobs:
  checkout-action:
    runs-on: ubuntu-latest
    steps:
      - name: List Files Before
        run: ls -a
      - uses: actions/checkout@v3
      - name: List Files After
        run: ls -a
  checkout-and-display-files:
    runs-on: ubuntu-latest
    steps:
      - name: List Files Before
        run: ls -a
      - name: Checkout
        run: |
          git init
          git remote add origin "https://$GITHUB_ACTOR:${{ secrets.GITHUB_TOKEN }}@github.com/$GITHUB_REPOSITORY.git"
          git fetch origin
          git checkout main
      - name: List Files After
        run: ls -a
