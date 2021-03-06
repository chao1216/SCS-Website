exports.config = {

  //The address of a running selenium server.
  seleniumAddress: 'http://localhost:4444/wd/hub',

  //Capabilities to be passed to the webdriver instance.
  capabilities: {
    'browserName': 'chrome'
  },

  //Specify the name of the specs files.
  specs: ['public/e2e-tests/*.js'],

  baseUrl: 'http://localhost:8000',

  //Options to be passed to Jasmine-node.
  jasmineNodeOpts: {
    onComplete: null,
    isVerbose: false,
    showColors: true,
    includeStackTrace: true
  }
};