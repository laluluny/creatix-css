#Setup a Web Site Project
To start building a web site with maven you just need to setup a new maven project including the maven-site-plugin. You project structure looks like this:

    src/
     | site/
     |  | markdown/
     |  | - index.md
     |  | - examples.md
     |  | resources/
     |  |  | css/
     | site.vm
     | site.xml
     pom.xml

The pom.xml file in the root folder contains the maven configuration. See the following example:


     <project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
          xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd">
      <modelVersion>4.0.0</modelVersion>
      <groupId>com.soika.ralph</groupId>
      <artifactId>my-project</artifactId>
      <packaging>pom</packaging>
      <name>my-project</name>
      <version>0.0.1</version>
      <description>My Project</description>
      <build>
      <plugins>
      <!-- web site -->
      <plugin>
      <groupId>org.apache.maven.plugins</groupId>
      <artifactId>maven-site-plugin</artifactId>
      <version>3.4</version>
      <configuration>
      <locales>en</locales>
      <templateDirectory>src/site</templateDirectory>
      <template>site.vm</template>
      </configuration>
      </plugin>
      </plugins>
      </build>
     </project>

The site.xml file in the /site/ folder is used to describe the site and place a menu structure which is automatically parsed by maven:

     <?xml version="1.0" encoding="ISO-8859-1"?>
     <project name="Maven">
          <body>
      <links>
      <item name="Github" href="https://github.com" />
      <item name="Download" href="https://github.com/s"/>
      </links>
      <menu>
      <item name="Home" href="index.html"/>
      <item name="Examples" href="examples.html"/>
      </menu>
      </body>
     </project>


The most interesting part is the site.vm file, which is a velocity template. This template is used to render each mardown file. Maven provides a lot of macros to render the output. Checkout the example in this project.


This template automatically renders a menue navigation and print out the proejct title, version and the latest build date.

##Build the web site
After you have setup the project structure you can build the web site with the followng maven command:

    mvn clean site

The result web site will be created in your project /target/site/ folder.


#Markdown and HTML
One advantage of Markdown is that you can insert HTML right in the middle of your text. This is pretty useful when you need some features not provided by the Markdown syntax but which are easy to do with HTML. Using the Maven site plugin you need to take care about headlines like h2, h3, … because these sub-headlines are interpreted as sections and will result in additional div tags.

In Addition the vilocity template engine provides several ways to customize the output of a markdown file.

