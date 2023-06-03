name: Environment Variables
on: [push]

env:
  WF_LEVEL_ENV: Available to all jobs

jobs:
  env-vars-and-context:
    runs-on: ubuntu-latest
    # if: $GITHUB_REF == 'refs/heads/main' DONT DO THIS
    if: github.ref == 'refs/heads/main'
    env:
      JOB_LEVEL_ENV: Available to all steps in env-vars-and-context job
    steps:
      - name: Log ENV VAR
        run: echo $GITHUB_REF
      - name: Log Context
        run: echo '${{ github.ref }}'
      - name: Set Env Var
        run: |
          echo "NEW_ENV_VAR=$(date)" >> "$GITHUB_ENV"
          echo "JOB_LEVEL_ENV=$RANDOM" >> "$GITHUB_ENV"
      - name: Multiline ENV Var
        run: |
          DELIMITER=$(dd if=/dev/urandom bs=15 count=1 status=none | base64)
          echo "RANDOM_JOKE<<$DELIMITER" >> "$GITHUB_ENV"
          echo "Here is a joke: " >> "$GITHUB_ENV"
          curl -s https://icanhazdadjoke.com/ >> "$GITHUB_ENV"
          echo "" >> "$GITHUB_ENV"
          echo "$DELIMITER" >> "$GITHUB_ENV"
      - name: Log Custom ENV Vars
        env:
          STEP_LEVEL_ENV: Available to only this step
          WF_LEVEL_ENV: Overriden in step
        run: |
          echo '${{ env.STEP_LEVEL_ENV }}'
          echo $STEP_LEVEL_ENV
          echo $WF_LEVEL_ENV
          echo $JOB_LEVEL_ENV
          echo $NEW_ENV_VAR
          echo $RANDOM_JOKE
