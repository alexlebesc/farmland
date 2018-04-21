import React, { Component } from "react";
import Helmet from "react-helmet";
import Creperie from "../components/Creperie/Creperie";
import config from "../../data/SiteConfig";

class CreperiePage extends Component {
  render() {
    return (
      <div>
        <Helmet>
          <title>{`Creperie | ${config.siteTitle}`}</title>
          <link rel="canonical" href={`${config.siteUrl}/creperie/`} />
        </Helmet>
        <Creperie />
      </div>
    );
  }
}

export default CreperiePage;
