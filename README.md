# Demo Elastic Beanstalk Stack Deployment

Nodejs example of deploying Elastic Beanstalk connecting to an external RDS instance using Cloudformation to deploy the resources, Code Build and Code Pipeline to deploy the application to EB.

The following resources are used to deploy this environment:

## Resources

### Infra (Initial Deployment)
* [EB Application]()
* [EB Application Version]()
* [EB Config Template]()
* [EB Environment]()
* [InstanceRole]()
* [InstanceProfile]()
* [RDS Instance]()
* [Code Build Project]()
* [Secrets Vault]()

### Cloudfront (Automated Deploymeent)
* [CF Distribution]()

# Usage

## Pre-requisites

Prior to using this repo you will need to have Github account and forked this repo for yourself (to be used later with the pipeline)

## Running Code

* First download the `infra.yaml` deploy this directly to your AWS account using the console or CLI. This will take several minutes to complete
* In the current version of this code base you will need to manually setup the AWS Code Pipeline. Below outlines each stage:
* * Stage 1 Source: Forked Repo 
* * Stage 2 Build: Code Build Project Built by CFN template
* * Stage 3 Deploy: Manually define a Code Deploy job that will deploy to the EB environment that was created
* * Stage 4 Build: 2nd Code Build Project to deploy the `cloudfront.yaml` CFN template