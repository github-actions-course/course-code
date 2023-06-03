name: Pull Request Comment
on:
  pull_request_target:
    types: [opened]

jobs:
  pr-comment:
    runs-on: ubuntu-latest
    permissions:
      pull-requests: write
    steps:
      - name: Comment on New PRs
        uses: actions/github-script@v6
        with:
          github-token: ${{ secrets.GITHUB_TOKEN }}
          script: |
            github.rest.issues.createComment({
              owner: context.repo.owner,
              repo: context.repo.repo,
              issue_number: context.issue.number,
              body: 'Thanks for contributing!',
            });
