using System;
using System.Text;
using System.Text.RegularExpressions;
using System.Threading;
using NUnit.Framework;
using OpenQA.Selenium;
using OpenQA.Selenium.Firefox;
using OpenQA.Selenium.Support.UI;

namespace SeleniumTests
{
    [TestFixture]
    public class MyFirstTest
    {
        private IWebDriver driver;
        private StringBuilder verificationErrors;
        private string baseURL;
        private bool acceptNextAlert = true;

        [SetUp]
        public void SetupTest()
        {
            // var options = new OpenQA.Selenium.Chrome.ChromeOptions();
            // options.AddArgument("no-sandbox");
            // driver = new OpenQA.Selenium.Chrome.ChromeDriver(options);
            //driver = new OpenQA.Selenium.Chrome.ChromeDriver();

            //FirefoxBinary binary = new FirefoxBinary('"C:\Program Files (x86)\Mozilla Firefox\');
            driver = new OpenQA.Selenium.Firefox.FirefoxDriver();
          //  driver = new OpenQA.Selenium.IE.InternetExplorerDriver();
            baseURL = "http://inec.github.io/ParseBlog/DevM/";
            verificationErrors = new StringBuilder();
        }

      /*  [TearDown]
        public void TeardownTest()
        {
            try
            {
                driver.Quit();
            }
            catch (Exception)
            {
                // Ignore errors if unable to close the browser
            }
            Assert.AreEqual("", verificationErrors.ToString());
        }*/

        [Test]
        public void TheSunovaMobileTest()
        {


            driver.Navigate().GoToUrl(http://inec.github.io/ParseBlog/DevM/");

            driver.FindElement(By.Name("start")).SendKeys("start");
            driver.FindElement(By.Name("end)).Clear();
            driver.FindElement(By.Name("end")).SendKeys("END");

        }

        private bool IsElementPresent(By by)
        {
            try
            {
                driver.FindElement(by);
                return true;
            }
            catch (NoSuchElementException)
            {
                return false;
            }
        }

        private bool IsAlertPresent()
        {
            try
            {
                driver.SwitchTo().Alert();
                return true;
            }
            catch (NoAlertPresentException)
            {
                return false;
            }
        }

        private string CloseAlertAndGetItsText()
        {
            try
            {
                IAlert alert = driver.SwitchTo().Alert();
                string alertText = alert.Text;
                if (acceptNextAlert)
                {
                    alert.Accept();
                }
                else
                {
                    alert.Dismiss();
                }
                return alertText;
            }
            finally
            {
                acceptNextAlert = true;
            }
        }
    }
}
