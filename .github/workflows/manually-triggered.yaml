name: Manually Triggered
on:
  workflow_dispatch:
    inputs:
      string:
        description: A string input
        type: string
        required: true
        default: "Default value"
      number:
        description: A number input
        default: 4
        type: number
      option:
        description: "An Options Input"
        required: true
        default: "Option 3"
        type: choice
        options:
          - Option 1
          - Option 2
          - Option 3
      boolean:
        description: A boolean option
        required: false
        type: boolean
      environment:
        description: "Environment"
        type: environment
        required: true

jobs:
  log-info:
    runs-on: ubuntu-latest
    steps:
      - run: echo $GITHUB_REF
      - run: |
          echo "String: ${{ inputs.string }}"
          echo "Number: ${{ inputs.number }}"
          echo "Option: ${{ inputs.option }}"
          echo "Boolean: ${{ inputs.boolean }}"
          echo "Environment: ${{ inputs.environment }}"
