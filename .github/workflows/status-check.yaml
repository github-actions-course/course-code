name: Status Check Functions
on: [push]

jobs:
  job-1:
    runs-on: ubuntu-latest
    timeout-minutes: 1
    steps:
      - name: Step 1
        run: sleep 90
        # timeout-minutes: 1
      - name: Step 2
        id: step-2
        continue-on-error: true
        run: exit 1
      - name: Runs on step 2 Failure
        if: failure() && steps.step-2.conclusion == 'failure'
        run: echo 'Step 2 has failed'
      - name: Runs on Failure
        if: failure()
        run: echo 'Failure'
      - name: Runs on Success
        # This is not needed (DEFAULT BEAHAVIOUR)
        if: success()
        run: echo 'Runs on Success'
      - name: Always Runs
        # if: success() || failure()
        if: always()
        run: echo 'Always Runs'
      - name: Runs When Cancelled
        if: cancelled()
        run: echo 'Runs on Cancelled'
  job-2:
    runs-on: ubuntu-latest
    needs: job-1
    if: failure()
    steps:
      - run: echo 'Job 2'
